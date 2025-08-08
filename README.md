# VG AI Agent Starter

This zip contains:
- n8n `workflow.json` (starter — replace with your full JSON from chat)
- WordPress local test config (`wp-env.json`, `composer.json`, `phpunit.xml.dist`, `phpstan.neon`, `.phpcs.xml`, `.eslintrc.json`, `.stylelintrc.json`)
- Qdrant `docker-compose.yml`
- `prompts/` templates
- `install.sh` and `.env.example`
- Minimal `plugin-folder`

## Quick start
1. `cp .env.example .env` and set keys.
2. `bash install.sh`
3. Import `workflow.json` into n8n (replace with full version from chat when ready).
4. Trigger the n8n webhook with `dry_run=true` to validate flow cheaply.

## Notes
- Ensure Docker, Node 18+, PHP 8.2+, Composer are installed on the host running n8n/test env.
- Replace `workflow.json` with the full JSON exported from Chat (the one with all nodes).
