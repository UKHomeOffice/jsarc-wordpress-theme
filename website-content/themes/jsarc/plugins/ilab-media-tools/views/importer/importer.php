<style>

</style>
<div class="settings-container">
    <header>
        <img src="{{ILAB_PUB_IMG_URL}}/icon-cloud.svg">
        <h1>{{$title}}</h1>
    </header>
    <div class="settings-body">
        <div id="s3-importer-manual-warning" style="display:none">
            <p><strong>IMPORTANT:</strong> You are running the import process in the web browser.  <strong>Do not navigate away from this page or the import may not finish.</strong></p>
        </div>
        <div id="s3-importer-instructions" {{($status=="running") ? 'style="display:none"':''}}>
            {{$instructions}}
            <div class="wp-cli-callout">
                <h3>Using WP-CLI</h3>
                <p>You can run this importer process from the command line using <a href="https://wp-cli.org" target="_blank">WP-CLI</a>:</p>
                <code>
                    {{$commandLine}}
                </code>
            </div>
            <div style="margin-top: 2em;">
                <?php if($enabled): ?>
                    <a id="s3-importer-start-import" href="#" class="ilab-ajax button button-primary">{{$commandTitle}}</a>
                <?php else: ?>
                    <strong class="tool-disabled">Please <a href="admin.php?page=media-tools-top">{{$disabledText}}</a> before using this tool.</strong>
                <?php endif ?>
            </div>
        </div>
        <div id="s3-importer-progress" {{($status!="running") ? 'style="display:none"':''}}>
            <div id="s3-importer-progress-text">
                <p id="s3-importer-cancelling-text" style="display:{{($shouldCancel) ? 'block':'none'}}">Cancelling ... This may take a minute ...</p>
            </div>
            <div id="s3-importer-thumbnails">
                <div id="s3-importer-thumbnails-container">
                </div>
                <div id="s3-importer-thumbnails-fade"></div>
                <img id="s3-importer-thumbnails-cloud" src="{{ILAB_PUB_IMG_URL}}/icon-cloud.svg">
            </div>
            <div class="s3-importer-progress-container">
                <div id="s3-importer-progress-bar" style="width: {{$progress}}%;"></div>
                <div id="s3-importer-status-text" style="visibility:{{($shouldCancel) ? 'hidden':'visible'}}">
                    <div>Processing '<span id="s3-importer-current-file">{{$currentFile}}</span>' (<span id="s3-importer-current">{{$current}}</span> of <span id="s3-importer-total">{{$total}}</span>).  <span id="s3-timing-stats"><span id="s3-timing-ppm">{{number_format($postsPerMinute, 1)}}</span> posts per minute, ETA: <span id="s3-timing-eta">{{number_format($eta, 2)}}</span>.</span></div>
                </div>
            </div>
            <button id="s3-importer-cancel-import" class="button button-whoa" title="Cancel">{{$cancelCommandTitle}}</button>
        </div>
    </div>
</div>
<script>
    (function($){
        $(document).ready(function(){
            var importing={{($status == 'running') ? 'true' : 'false'}};
            var totalIndex = -1;
            var currentIndex = -1;
            var currentPage = 1;
            var totalPages = {{$pages}};
            var totalItems = {{$total}};
            var manualStart = 0;
            var fromSelection = {{($fromSelection) ? 'true' : 'false'}};
            var autoStart = {{($shouldRun) ? 'true' : 'false'}};
            var displayedThumbs = [];

            const backgroundImport = {{ ($background) ? 'true' : 'false' }};
            var postsToImport = {{ json_encode($posts, JSON_PRETTY_PRINT) }};

            const displayNextThumbnail = function(thumbUrl, icon) {
                if (thumbUrl == null) {
                    return;
                }
                
                if (!icon && (displayedThumbs.length > 0)) {
                    if (displayedThumbs[displayedThumbs.length - 1].attr('src') == thumbUrl) {
                        return;
                    }
                }

                var image = null;
                if (!icon) {
                    image = $('<img src="'+thumbUrl+'">');
                } else {
                    image = $('<div class="s3-importer-image-icon"><img src="'+thumbUrl+'"></div>');
                }

                image.hide().prependTo('#s3-importer-thumbnails-container').fadeIn();
                displayedThumbs.push(image);

                if (displayedThumbs.length >= 20) {
                    var firstImage = displayedThumbs.shift();
                    firstImage.remove();
                    console.log(displayedThumbs.length);
                }
            }

            const nextBatch = function(callback) {
                if (!importing) {
                    return;
                }

                currentPage++;
                if (currentPage > totalPages) {
                    callback(false);
                    return;
                }

                const data={
                    action: '{{$nextBatchAction}}',
                    page: currentPage
                };

                $.post(ajaxurl,data,function(response){
                    postsToImport = response.posts;
                    currentIndex = 0;

                    callback((postsToImport.length >  0));
                });

            };

            const importNextManual = function () {
                if (!importing) {
                    return;
                }

                currentIndex++;
                if (currentIndex == postsToImport.length) {
                    nextBatch(function(success){
                        if (success) {
                            importNextManual();
                        } else {
                            importing = false;
                            $('#s3-importer-instructions').css({display: 'block'});
                            $('#s3-importer-progress').css({display: 'none'});
                            $('#s3-importer-manual-warning').css('display', 'none');
                            document.location.reload();
                        }
                    });

                    return;
                }

                totalIndex++;

                displayNextThumbnail(postsToImport[currentIndex].thumb, postsToImport[currentIndex].icon);

                $('#s3-importer-status-text').css({'visibility':'visible'});
                $('#s3-importer-current').text((totalIndex + 1));
                $('#s3-importer-current-file').text(postsToImport[currentIndex].title);
                $('#s3-importer-total').text(totalItems);

                const progress = Math.min(100, ((totalIndex + 1) / totalItems) * 100);
                $('#s3-importer-progress-bar').css({width: progress+'%'});

                const data={
                    action: '{{$manualAction}}',
                    post_id: postsToImport[currentIndex].id
                };

                $.post(ajaxurl,data,function(response){
                    if (response.status == 'error') {
                        document.location.reload();
                    }

                    const totalTime = (performance.now() - manualStart) / 1000.0;
                    const postsPerSecond = totalTime / (totalIndex + 1);
                    const postsPerMinute = 60 / postsPerSecond;
                    const eta = (totalItems - (totalIndex + 1)) / postsPerMinute;

                    $('#s3-timing-stats').css({display: 'inline-block'});
                    $('#s3-timing-ppm').text(postsPerMinute.toFixed(1));

                    const date = new Date();
                    date.setSeconds(date.getSeconds() + (eta * 60.0));

                    $('#s3-timing-eta').text(date.toLocaleTimeString());

                    importNextManual();
                });

            };

            const startImport = function() {
                if (importing) {
                    return false;
                }

                if (currentPage > 1) {
                    currentPage = 0;
                    nextBatch(function(success){
                        if (success) {
                            startImport();
                        } else {
                            return;
                        }
                    });

                    return;
                }

                currentIndex = -1;
                totalIndex = -1;
                importing=true;
                displayedThumbs = [];
                $('#s3-importer-thumbnails-container').empty();

                if (backgroundImport) {
                    var data={
                        action: '{{$startAction}}'
                    };

                    if (fromSelection) {
                        postIds = [];
                        for(var i=0; i<postsToImport.length; i++) {
                            postIds.push(postsToImport[i].id);
                        }

                        data['selection'] = postIds;

                        $('#s3-importer-cancel-import').attr('disabled', false);
                        $('#s3-importer-cancelling-text').css({'display':'none'});
                        $('#s3-importer-status-text').css({'visibility':'visible'});

                        $('#s3-importer-instructions').css({display: 'none'});
                        $('#s3-importer-progress').css({display: 'block'});

                        displayNextThumbnail(postsToImport[0].thumb, postsToImport[0].icon);

                        $('#s3-importer-status-text').css({'visibility':'visible'});
                        $('#s3-importer-current').text(1);
                        $('#s3-importer-current-file').text(postsToImport[0].title);
                        $('#s3-importer-total').text(totalItems);
                    }

                    $.post(ajaxurl,data,function(response){
                        if (response.status == 'error') {
                            document.location.reload();
                        }

                        if (response.status == 'running') {
                            $('#s3-importer-cancel-import').attr('disabled', false);
                            $('#s3-importer-cancelling-text').css({'display':'none'});
                            $('#s3-importer-status-text').css({'visibility':'visible'});

                            $('#s3-importer-instructions').css({display: 'none'});
                            $('#s3-importer-progress').css({display: 'block'});

                            displayNextThumbnail(response.first.thumb, response.first.icon);

                            totalItems = response.total;
                            $('#s3-importer-status-text').css({'visibility':'visible'});
                            $('#s3-importer-current').text(1);
                            $('#s3-importer-current-file').text(response.first.title);
                            $('#s3-importer-total').text(totalItems);

                            setTimeout(checkStatus, 3000);
                        }
                    });
                } else {
                    manualStart = performance.now();

                    $('#s3-importer-manual-warning').css('display', 'block');
                    $('#s3-importer-progress-bar').css({width: '0%'});
                    $('#s3-importer-status-text').css({'visibility':'hidden'});

                    $('#s3-importer-cancel-import').attr('disabled', false);
                    $('#s3-importer-cancelling-text').css({'display':'none'});

                    $('#s3-importer-instructions').css({display: 'none'});
                    $('#s3-importer-progress').css({display: 'block'});

                    importNextManual();
                }
            };

            const cancelImport = function () {
                if (backgroundImport) {
                    var data={
                        action: '{{$cancelAction}}'
                    };

                    $.post(ajaxurl,data,function(response){
                        $('#s3-importer-cancelling-text').css({'display':'block'});
                        $('#s3-importer-status-text').css({'visibility':'hidden'});
                        $('#s3-importer-cancel-import').attr('disabled', true);
                        console.log(response);
                    });
                } else {
                    importing = false;
                    $('#s3-importer-manual-warning').css('display', 'none');
                    $('#s3-importer-instructions').css({display: 'block'});
                    $('#s3-importer-progress').css({display: 'none'});
                }
            };

            const checkStatus = function() {
                if (importing) {
                    const data={
                        action: '{{$progressAction}}'
                    };

                    $.post(ajaxurl,data,function(response){
                        if (response.shouldCancel) {
                            $('#s3-importer-cancelling-text').css({'display':'block'});
                            $('#s3-importer-status-text').css({'visibility':'hidden'});
                        } else {
                            $('#s3-importer-cancelling-text').css({'display':'none'});
                            $('#s3-importer-status-text').css({'visibility':'visible'});
                        }

                        if (response.status != 'running') {
                            importing = false;
                            $('#s3-importer-instructions').css({display: 'block'});
                            $('#s3-importer-progress').css({display: 'none'});
                            document.location.reload();
                        } else {
                            if (response.total > 0) {
                                var progress = (response.current / response.total) * 100;
                                $('#s3-importer-progress-bar').css({width: progress+'%'});
                            }

                            if (response.thumb != null) {
                                displayNextThumbnail(response.thumb);
                            }

                            $('#s3-timing-stats').css({display: 'inline-block'});

                            $('#s3-importer-current').text(response.current);
                            $('#s3-importer-current-file').text(response.currentFile);
                            $('#s3-importer-total').text(response.total);
                            $('#s3-timing-ppm').text(parseFloat(response.postsPerMinute).toFixed(1));

                            var date = new Date();
                            date.setSeconds(date.getSeconds() + (parseFloat(response.eta) * 60.0));

                            $('#s3-timing-eta').text(date.toLocaleTimeString());
                        }
                    });
                }

                setTimeout(checkStatus, 3000);
            };

            $('#s3-importer-start-import').on('click',function(e){
                e.preventDefault();

                startImport();

                return false;
            });


            $('#s3-importer-cancel-import').on('click', function(e){
                e.preventDefault();

                if (confirm("Are you sure you want to cancel?")) {
                    cancelImport();
                }

                return false;
            });

            if (autoStart && importing) {
                importing = false;
                startImport();
            } else if (importing && backgroundImport) {
                checkStatus();
            }
        });
    })(jQuery);
</script>