#!/usr/bin/env bash
set -euo pipefail

REMOTE="sakura-algo:/home/algo-inc/www/cells.algo-cosme.com/cells/"
EXCLUDES=(
  --exclude ".git/"
  --exclude ".DS_Store"
  --exclude "deploy.sh"
  --exclude "deploy_dry.sh"
  --exclude "README.md"
)

echo "== DEPLOY: local -> ${REMOTE} =="
rsync -avz --delete "${EXCLUDES[@]}" ./ "${REMOTE}"
echo "== DONE (deploy) =="
