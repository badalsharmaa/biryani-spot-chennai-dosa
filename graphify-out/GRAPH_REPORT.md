# Graph Report - biryani_spot_chennai_dosa  (2026-08-31)

## Corpus Check
- 28 files · ~130,981 words
- Verdict: corpus is large enough that graph structure adds value.

## Summary
- 95 nodes · 87 edges · 9 communities (8 shown, 1 thin omitted)
- Extraction: 100% EXTRACTED · 0% INFERRED · 0% AMBIGUOUS
- Token cost: 0 input · 0 output

## Community Hubs (Navigation)
- Cluster 0
- Cluster 1
- Cluster 2
- Cluster 3
- Cluster 4
- Cluster 5
- Cluster 6
- Cluster 7
- Cluster 8

## God Nodes (most connected - your core abstractions)
1. `downloadFile()` - 2 edges
2. `runDownloads()` - 2 edges
3. `fs` - 1 edges
4. `path` - 1 edges
5. `https` - 1 edges
6. `ROOT_DIR` - 1 edges
7. `DATA_DIR` - 1 edges
8. `ASSETS_DIR` - 1 edges
9. `apolloState` - 1 edges
10. `dublinData` - 1 edges

## Surprising Connections (you probably didn't know these)
- None detected - all connections are within the same source files.

## Import Cycles
- None detected.

## Communities (9 total, 1 thin omitted)

### Community 0 - "Cluster 0"
Cohesion: 0.09
Nodes (22): apolloState, ASSETS_DIR, assetsToDownload, brandAndTheme, concordData, DATA_DIR, downloadFile(), dublinData (+14 more)

### Community 1 - "Cluster 1"
Cohesion: 0.09
Nodes (21): 1. Force HTTPS and canonical non-www domain, 2. Whitelist static assets & metadata files, 3. Protect sensitive files from direct browser access, 4. Universal clean URL routing to index.php, A. Web Server Gateway (`public_html/.htaccess`), B. Environment Configuration (`public_html/.env`), Daily Automated MySQL Database Dump at 2:00 AM, Disable directory browsing (+13 more)

### Community 2 - "Cluster 2"
Cohesion: 0.18
Nodes (10): 1. Primary Objectives, 2. Core Pages & Feature Specifications, 3. User Journeys, 🍛 4. Catering & Events Page (`/catering`), 🍽️ 2. Interactive Menu Page (`/menu` & `/menu/[location]`), 🎁 6. Gift Cards Page (`/gift-cards`), 🏠 1. Home Page (`/`), 📋 FEATURES & PRODUCT REQUIREMENTS (PRD) (+2 more)

### Community 3 - "Cluster 3"
Cohesion: 0.18
Nodes (10): 1. Brand Identity & Overview, 2. Brand Voice, Tone & Messaging, 3. Target Audience & Customer Personas, 4. Restaurant Locations & Operational Information, 5. Payment Methods & Services Accepted, Location 1: Dublin, Location 2: Milpitas, Location 3: Livermore (+2 more)

### Community 4 - "Cluster 4"
Cohesion: 0.25
Nodes (7): Session 1 — August 31, 2026, 🎯 5. Immediate Next Steps & Backlog, 📂 3. Sources of Truth & Project Map, 📌 1. Project Overview & Fundamental Context, 📜 4. Chronological Session History, 🛠️ 2. Core Technical Decisions & Architecture, 🧠 AI Long-Term Memory & Context Ledger

### Community 5 - "Cluster 5"
Cohesion: 0.29
Nodes (6): 1. Core Framework & Technologies, 2. Directory Structure Conventions, 3. Database Architecture (MySQL), 4. Security & Performance Best Practices, Key Relational Tables:, 🛠️ TECH STACK & SYSTEM ARCHITECTURE (PHP + MySQL)

### Community 6 - "Cluster 6"
Cohesion: 0.33
Nodes (5): 1. Core Principles, 2. Component Design & Styling Rules, 3. Data & State Management Guidelines, 4. What NOT to Do 🚫, 🤖 AI CODING STANDARDS & WORKFLOW RULES (PHP + MySQL)

### Community 7 - "Cluster 7"
Cohesion: 0.40
Nodes (4): 📂 Project Directory Structure, 📈 Development Roadmap & Status, 📋 Biryani Spot Chennai Dosa — AI Development Tracker & Progress Log, 🧭 Quick Context for AI Agents & Developers

## Knowledge Gaps
- **84 isolated node(s):** `fs`, `path`, `https`, `ROOT_DIR`, `DATA_DIR` (+79 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **1 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **What connects `fs`, `path`, `https` to the rest of the system?**
  _84 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `Cluster 0` be split into smaller, more focused modules?**
  _Cohesion score 0.09090909090909091 - nodes in this community are weakly interconnected._
- **Should `Cluster 1` be split into smaller, more focused modules?**
  _Cohesion score 0.09090909090909091 - nodes in this community are weakly interconnected._