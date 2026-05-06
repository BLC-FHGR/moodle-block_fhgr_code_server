# moodle-block_fhgr_code_server

A Moodle block that gives students one-click access to a hosted VS Code (code-server) instance from inside a quiz attempt. Designed for programming exams and coding practice at FHGR.

## Requirements

- Moodle 5.0 or later (tested on 5.0 and 5.2)
- An access key issued by the FHGR Code Server administrator

## Features

- Restricted to quiz contexts — the block can only be added to quiz pages
- Per-block configuration of access key and operating mode
- Two modes:
  - **Exam** — launches an exam-locked code-server session
  - **Mock Exam / Coding practice** — launches a practice session
- Launch link is only rendered during an active quiz attempt (`mod-quiz-attempt`)
- Lecturer-only notice about the 50-user concurrency limit
- German and English language packs

## Installation

For Moodle 5.0, place the plugin folder at:

```
blocks/fhgr_code_server
```

For Moodle 5.1 and later (with the `public/` web root):

```
public/blocks/fhgr_code_server
```

Then visit **Site administration → Notifications** to complete installation.

## Configuration

The block has no site-wide settings. Each block instance is configured individually:

1. In the desired quiz, turn editing on and add the **FHGR Code Server** block.
2. Open the block's configuration and set:
   - **Access key** — provided by the Moodle administrator
   - **Mode** — `Exam` for graded exams, `Mock Exam / Coding practice` otherwise
3. Save changes.

### Quiz settings

For the launch link to appear to students, the quiz must be configured so blocks are visible during attempts:

- Quiz settings → **Appearance** → **Show blocks during quiz attempts** must be enabled.
- The block must be available on the **Attempt quiz** page (or **Any quiz module page**).

## Usage

Students see the **Open Code Server** link only while a quiz attempt is in progress. Clicking it opens a new Code Server tab.

Lecturers (anyone with `moodle/course:update`) additionally see an informational notice in the block — including a reminder of the 50-concurrent-user limit — so they can verify configuration without starting an attempt.

## Capacity

Each code server is sized for up to **50 concurrent students**. For larger cohorts, contact the administrator about provisioning an additional server.

## Languages

- English (`en`)
- German (`de`)

## License

GPL v3 or later — see [LICENSE](LICENSE).

## Author

FHGR — Ramon Heeb
