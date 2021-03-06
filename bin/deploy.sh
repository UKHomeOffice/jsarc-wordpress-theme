#!/usr/bin/env bash

set -o errexit
set -o nounset

function deployIngress() {
    local deployTo=$1

    if [[ "$deployTo" == "acp-prod" ]]; then

        if ! kd --timeout=5m \
          -f kube/jsarc-ingress-prod.yml; then
          echo "[error] failed to deploy jsarc"
          exit 1
        fi

        else
        if ! kd --timeout=5m \
          -f kube/jsarc-ingress.yml; then
          echo "[error] failed to deploy jsarc"
          exit 1
        fi

    fi
}

# default values
export DRONE_DEPLOY_TO_ACP=${DRONE_DEPLOY_TO_ACP:?'[error] Please specify which cluster to deploy to.'}
export KUBE_NAMESPACE=${KUBE_NAMESPACE=jsarc}
export KUBE_CERTIFICATE_AUTHORITY=https://raw.githubusercontent.com/UKHomeOffice/acp-ca/master/${DRONE_DEPLOY_TO_ACP}.crt

export NAME="jsarc"
export CONFIG_MAP_NAME="jsarc-config"
export ADMIN_DEPLOYMENT="no"
export PROD_URL="www.jsarc.org"

echo "Deploying to $DRONE_DEPLOY_TO_ACP"

case ${DRONE_DEPLOY_TO_ACP} in
  'acp-notprod')
    export SITE_URL="web.jsarc-notprod.homeoffice.gov.uk"
    export ADMIN_SITE_URL="admin.jsarc-notprod.homeoffice.gov.uk"
    export KUBE_SERVER="https://kube-api-notprod.notprod.acp.homeoffice.gov.uk"
    export KUBE_TOKEN=${KUBE_TOKEN_ACP_NOTPROD}
    export RDS_SECRET_NAME="jsarc-rds"
    export S3_SECRET_NAME="jsarc-s3"
    export REPLICA_COUNT=2
    export JSARC_NAME="jsarc"
    export INGRESS_NAME="jsarc-ingress.yml"
    export CERTIFICATE_NAME="jsarc-certificate.yml"
    ;;
  'acp-prod')
    export KUBE_SERVER="https://kube-api-prod.prod.acp.homeoffice.gov.uk"
    #export SITE_URL="web.jsarc.homeoffice.gov.uk"
    export SITE_URL="$PROD_URL"
    export ADMIN_SITE_URL="admin.jsarc.org"
    export KUBE_TOKEN=${KUBE_TOKEN_ACP_PROD}
    export RDS_SECRET_NAME="jsarc-prod-rds"
    export S3_SECRET_NAME="jsarc-prod-s3"
    export REPLICA_COUNT=3
    export JSARC_NAME="jsarc"
    export INGRESS_NAME="jsarc-ingress-prod.yml"
    export CERTIFICATE_NAME="jsarc-certificate-prod.yml"
    ;;
esac

echo "--- kube api url: ${KUBE_SERVER}"
echo "--- namespace: ${KUBE_NAMESPACE}"
echo "--- image url: ${IMAGE_URL}"


echo "--- deploying jsarc"
if ! kd --timeout=5m \
  -f kube/jsarc-config.yml \
  -f kube/jsarc-deployment.yml \
  -f kube/jsarc-service.yml \
  -f kube/${INGRESS_NAME} \
  -f kube/${CERTIFICATE_NAME} \
  -f kube/jsarc-networkpolicy.yml; then
  echo "[error] failed to deploy jsarc"
  exit 1
fi

deployIngress "$DRONE_DEPLOY_TO_ACP"

echo "--- deploying jsarc admin"

export REPLICA_COUNT=1
export JSARC_NAME=jsarc-admin
export SITE_URL="$ADMIN_SITE_URL"
export CONFIG_MAP_NAME="jsarc-config-admin"
export ADMIN_DEPLOYMENT="yes"


if ! kd --timeout=5m \
  -f kube/jsarc-config.yml \
  -f kube/jsarc-deployment.yml \
  -f kube/jsarc-service.yml \
  -f kube/jsarc-networkpolicy.yml \
  -f kube/jsarc-certificate-admin.yml \
  -f kube/jsarc-ingress-admin.yml; then
  echo "[error] failed to deploy jsarc"
  exit 1
fi

