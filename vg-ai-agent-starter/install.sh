#!/usr/bin/env bash
set -euo pipefail

echo "[*] Starting Qdrant..."
docker compose up -d qdrant

echo "[*] Installing composer deps..."
composer install || true

echo "[*] Starting WordPress dev env (wp-env)..."
npx @wordpress/env start

echo "[OK] Base services started."
