#!/usr/bin/env bash

set -o errexit
set -o nounset

# default values
export DRONE_DEPLOY_TO=${DRONE_DEPLOY_TO:?'[error] Please specify which cluster to deploy to.'}
export KUBE_NAMESPACE=${KUBE_NAMESPACE=jsarc}
export KUBE_CERTIFICATE_AUTHORITY=https://raw.githubusercontent.com/UKHomeOffice/acp-ca/master/${DRONE_DEPLOY_TO}.crt

export NAME="jsarc"

case ${DRONE_DEPLOY_TO} in
  'acp-notprod')
    export KUBE_SERVER="https://kube-api-notprod.notprod.acp.homeoffice.gov.uk"
    export KUBE_TOKEN=${KUBE_TOKEN_ACP_NOTPROD}
    ;;
esac

echo "--- kube api url: ${KUBE_SERVER}"
echo "--- namespace: ${KUBE_NAMESPACE}"
echo "--- image url: ${IMAGE_URL}"


echo "--- deploying jsarc"
if ! kd --timeout=5m \
  -f kube/jsarc-deployment.yml \
  -f kube/jsarc-service.yml \
  -f kube/jsarc-networkpolicy.yml \
  -f kube/jsarc-demo.yml \
  -f kube/jsarc-ingress.yml; then
  echo "[error] failed to deploy jsarc"
  exit 1
fi
