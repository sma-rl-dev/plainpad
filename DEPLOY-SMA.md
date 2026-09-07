# Plainpad tester environment

```bash
./tester-env deploy
./tester-env seed
./tester-env verify
./tester-env status
./tester-env logs
./tester-env reset
```

The app is at `http://localhost:8098/` (override with `PLAINPAD_PORT`). Deployment builds `Dockerfile.tester-env` from the checked-out PHP and React source, then runs Laravel `migrate:fresh --seed`.

Credentials: `admin@example.org` / `12345678`. MySQL is an isolated Compose named volume, removed by `reset`; the upstream `docker/mysql` bind mount is not used. `IMAGE_TAG` controls the app image and `RUN_ID` isolates Compose containers and volumes.

The Docker daemon's custom-network pool is exhausted, so this prospect uses the default bridge and fixed internal host ports `19000` (PHP-FPM) and `13306` (MySQL); it is not parallel-run safe until a custom Docker network can be allocated.

`seed` replaces the admin's notes with four fixed notes: pinned `Quarterly Launch Plan`, `Design Review Checklist`, `Incident Retrospective: API Timeout`, and `Vendor Renewal Notes`. Their timestamps are fixed from January through March 2024; `Quarterly Launch Plan` contains `April rollout` for filtering. `verify` logs in through the app API and checks the exact titles, pinned state, content, and timestamps.
