<div id="hero">
  <h1 align="center" dir="auto">SwissOS</h1>
  <p align="center" dir="auto">
    <a href="https://github.com/karlrodriguez/swissos/blob/main/LICENSE.md"><img src="https://img.shields.io/github/license/karlrodriguez/swissos" alt="License"></a>
    <a href="https://github.com/karlrodriguez/swissos/releases"><img src="https://img.shields.io/github/v/release/karlrodriguez/swissos" alt="Latest Release"></a>
    <a href="https://github.com/karlrodriguez/swissos/stargazers"><img src="https://img.shields.io/github/stars/karlrodriguez/swissos?style=social" alt="GitHub Stars"></a>
  </p>
  <p align="center" dir="auto">
    <strong>Open-source logistics and supply chain operating system</strong>
    <br>
    <a href="https://swissos.io/docs" rel="nofollow">Documentation</a>
    ·
    <a href="https://swissos.io/docs/api" rel="nofollow">API Reference</a>
    ·
    <a href="https://console.swissos.io/onboard" rel="nofollow">Try SwissOS Cloud</a>
  </p>
  <hr />
</div>

## What is SwissOS?

SwissOS is an open-source, modular operating system for logistics and supply chain operations. It covers dispatch, fleet management, live tracking, commerce, warehousing, and finance in one platform, with a REST API, webhooks, and an extension system for everything else. Run it on your own infrastructure or use [SwissOS Cloud](https://console.swissos.io/onboard).

## Table of Contents

- [Who Uses SwissOS](#who-uses-swissos)
- [Platform](#platform)
- [Features](#features)
- [Screenshots](#screenshots)
- [Getting Started](#getting-started)
- [Extensions](#extensions)
- [Roadmap](#roadmap)
- [Documentation](#documentation)
- [Community & Support](#community--support)
- [Contributing](#contributing)
- [Maintainer](#maintainer)
- [License](#license)

## Who Uses SwissOS

SwissOS is built for teams that move goods, people, or equipment and want to own the software that runs it. Because every workflow, field, and status is configurable, the same platform adapts to very different operations.

| Industry | How SwissOS is used |
|----------|-----------------------|
| [Trucking&nbsp;&&nbsp;Haulage](https://swissos.io/solutions/trucking) | Replace a legacy TMS with real-time tracking, route optimization, and digital proof of delivery. |
| [Courier&nbsp;&&nbsp;Parcel](https://swissos.io/solutions/courier-services) | Automate dispatch, raise first-attempt delivery rates, and give customers live parcel tracking. |
| [Food&nbsp;&&nbsp;Grocery&nbsp;Delivery](https://swissos.io/solutions/food-delivery) | Run on-demand delivery with instant dispatch, live customer tracking, and automated notifications. |
| [E&#8209;commerce&nbsp;&&nbsp;Retail](https://swissos.io/solutions/ecommerce) | Power same-day and next-day delivery and returns through a headless API. |
| [Healthcare&nbsp;&&nbsp;Pharmacy](https://swissos.io/solutions/healthcare) | Track chain of custody and prioritize urgent deliveries with full audit trails. |
| [Waste&nbsp;&&nbsp;Recycling](https://swissos.io/solutions/waste-management) | Optimize collection routes, track containers, and produce compliance reports. |
| [Container&nbsp;Operations](https://swissos.io/solutions/container-operations) | Follow containers across multi-modal journeys from port to door. |
| [Government&nbsp;&&nbsp;Defense](https://swissos.io/solutions/government) | Self-host with role-based access, full audit trails, and complete data sovereignty. |

Developers use SwissOS as a foundation too, building custom logistics products on its API and extension framework.

## Platform

SwissOS is made up of modules that install into the console as extensions. Each one works on its own and integrates with the rest.

| Module | What it does |
|--------|--------------|
| [Fleet&#8209;Ops](https://swissos.io/docs/fleet-ops) | Fleet management and dispatch: orders, drivers, vehicles, live tracking, route optimization, configurable workflows, and maintenance. |
| [Storefront](https://swissos.io/docs/storefront) | Headless commerce for on-demand businesses, with multi-vendor marketplaces and native Fleet-Ops delivery. |
| [Pallet](https://swissos.io/docs/pallet) | Warehouse management for inventory, pick lists, cycle counts, and fulfilment. |
| [Ledger](https://swissos.io/docs/ledger) | Invoicing, payments, wallets, and accounting for logistics operators. |
| [Customer&nbsp;Portal](https://github.com/fleetbase/customer-portal) | A self-service workspace for your customers to place and track orders, get quotes and pay, view invoices, manage documents, and open support tickets. |
| [AI](https://swissos.io/platform/ai) | Natural-language order creation, operational queries, and order insights powered by OpenAI or Claude. |
| [IAM](https://swissos.io/docs/platform/identity-and-access/users) | Identity and access management: users, groups, roles, policies, and two-factor authentication across your organization. |
| [Developers](https://swissos.io/docs/platform/developer-console) | The developer console: API keys, webhooks, socket and system events, and request logs, with separate test and live environments. |
| [Navigator&nbsp;App](https://github.com/fleetbase/navigator-app) | Open-source driver app for iOS and Android with real-time dispatch, navigation, and proof of delivery. |
| [Storefront&nbsp;App](https://github.com/fleetbase/storefront-app) | Open-source iOS and Android app for launching your own shop or marketplace. |

## Features

| Feature | Description |
|---------|-------------|
| **Extensible** | Install extensions from the marketplace or build your own to add features directly into the OS. |
| **Developer friendly** | REST API, WebSockets, and webhooks for integrating external systems or building custom apps. |
| **Configurable workflows** | Define order types with their own activity flows, custom fields, and automation. |
| **Real-time operations** | Track drivers, vehicles, and orders live, with geofences and service zones. |
| **Telematics** | Connect GPS devices and sensors for live feedback from the field. |
| **Identity & access** | Organizations, users, roles, policies, and two-factor authentication. |
| **Dashboards** | Build custom dashboards and widgets for visibility into operations. |
| **Collaboration** | Built-in chat, comments, and notifications across your organization. |
| **Internationalized** | Translate the console into any language. |
| **Self-hosted or cloud** | Run it on your own infrastructure with full control of your data, or let us host it. |

## Screenshots

<table>
  <tr>
    <td width="50%" valign="top">
      <p align="center"><strong>Order Board</strong><br>Move orders through each stage on a Kanban board.</p>
    </td>
    <td width="50%" valign="top">
      <p align="center"><strong>Live Operations</strong><br>See active and unassigned orders beside your fleet on a live map.</p>
    </td>
  </tr>
  <tr>
    <td width="50%" valign="top">
      <p align="center"><strong>Order Config</strong><br>Design custom activity flows, fields, and entities for each order type.</p>
    </td>
    <td width="50%" valign="top">
      <p align="center"><strong>Orchestrator</strong><br>Allocate vehicles and drivers, assign orders in batches, and plan and schedule routes before committing.</p>
    </td>
  </tr>
  <tr>
    <td width="50%" valign="top">
      <p align="center"><strong>Service Zones & Geofences</strong><br>Define service areas and zones, and watch geofence events as they happen.</p>
    </td>
    <td width="50%" valign="top">
      <p align="center"><strong>Storefront</strong><br>Manage products, catalogs, and orders for your shop or marketplace.</p>
    </td>
  </tr>
  <tr>
    <td width="50%" valign="top">
      <p align="center"><strong>Ledger</strong><br>Track revenue, invoices, receivables, and wallet balances.</p>
    </td>
    <td width="50%" valign="top">
      <p align="center"><strong>Extensions</strong><br>Browse and install free and paid extensions from the marketplace.</p>
    </td>
  </tr>
</table>

## Getting Started

There are three ways to run SwissOS:

- **[SwissOS Cloud](https://swissos.io/docs/platform/quickstart/cloud-quickstart)**: fully managed, with nothing to install. [Start a free trial](https://console.swissos.io/onboard).
- **[Run locally](https://swissos.io/docs/platform/quickstart/running-locally)**: self-host with Docker on your own machine or server.
- **[Deploy in your cloud](https://swissos.io/docs/platform/quickstart/deploy-in-cloud)**: run production workloads on AWS, GCP, Azure, or any other provider.

### Quickstart

You need Docker with Docker Compose v2, Git, Node.js 18 or newer, and at least 4 GB of RAM allocated to Docker. Then clone the repository and run the interactive installer:

```bash
git clone https://github.com/karlrodriguez/swissos.git
cd swissos
bash scripts/docker-install.sh
```

When setup finishes, open the console at http://localhost:4200 and create your first admin account and organization. The API is served at http://localhost:8000.

The [running locally guide](https://swissos.io/docs/platform/quickstart/running-locally) also covers installing with Docker Compose or the setup script, configuring services like mail, maps, and SMS, and troubleshooting. To work on SwissOS itself, follow the [development setup guide](https://swissos.io/docs/platform/quickstart/development-setup).

## Extensions

Extensions add features, integrate external systems, or change how SwissOS behaves. Browse and install them from the console or with the [SwissOS CLI](https://swissos.io/docs/cli), and publish your own to the marketplace as free or paid extensions.

- [Browse and install extensions](https://swissos.io/docs/platform/extensions/browsing-and-installing)
- [Build your first extension](https://swissos.io/docs/extension-development/getting-started/quickstart)
- [Extension architecture](https://swissos.io/docs/extension-development/architecture/overview)

## Roadmap

| Feature | Status | Expected Release | Description |
|---------|--------|------------------|-------------|
| **Pallet (WMS)** | In development | Q4 2026 | Inventory and warehouse management extension |
| **Dynamic Rules** | Planned | 2027 | Rule builder to trigger events, tasks, and jobs |

Want to influence the roadmap? [Join the discussion](https://github.com/orgs/karlrodriguez/discussions).

## Documentation

- **[Overview](https://swissos.io/docs/platform/getting-started/overview)** and **[architecture](https://swissos.io/docs/platform/getting-started/architecture)**: how the platform fits together
- **[Installation](https://swissos.io/docs/platform/quickstart/running-locally)**: run SwissOS locally or [deploy it in the cloud](https://swissos.io/docs/platform/quickstart/deploy-in-cloud)
- **[System setup](https://swissos.io/docs/platform/system-setup/services)**: configure mail, maps, SMS, storage, queues, and sockets
- **[API reference](https://swissos.io/docs/api)**: endpoints, authentication, and [API keys](https://swissos.io/docs/platform/developer-console/api-keys)
- **[SwissOS CLI](https://swissos.io/docs/cli)**: every command for installing, managing, and publishing extensions
- **[Extension development](https://swissos.io/docs/extension-development/getting-started/quickstart)**: build and publish your own extensions
- **[Database schema](erd.svg)**: an entity relationship diagram of the full database, regenerated with each release ([dark version](erd-dark.svg))

## Community & Support

- **Discussions**: Ask questions and share ideas in [GitHub Discussions](https://github.com/orgs/karlrodriguez/discussions).
- **Bugs**: Search the [issue tracker](https://github.com/karlrodriguez/swissos/issues) first, then [open a new issue](https://github.com/karlrodriguez/swissos/issues/new).
- **Security**: Report vulnerabilities privately as described in [SECURITY.md](SECURITY.md).
- **Support plans**: See [community, cloud, and enterprise support options](https://swissos.io/docs/community/support-plans).
- **Releases**: Read changelogs on the [Releases](https://github.com/karlrodriguez/swissos/releases) page and announcements on the [SwissOS blog](https://swissos.io/blog).

## Contributing

We welcome contributions from the community.

- **Report bugs**: [Open an issue](https://github.com/karlrodriguez/swissos/issues/new)
- **Suggest features**: [Start a discussion](https://github.com/orgs/karlrodriguez/discussions)
- **Submit pull requests**: Read the [Contributing Guide](CONTRIBUTING.md) and the [Code of Conduct](CODE_OF_CONDUCT.md)
- **Translate**: Add or improve a language by following [TRANSLATING.md](TRANSLATING.md)
- **Write documentation**: Help improve the [docs](https://swissos.io/docs)
- **Build extensions**: Create and share [extensions](https://swissos.io/docs/extension-development/getting-started/quickstart)

To set up a local development environment, see the [development setup guide](https://swissos.io/docs/platform/quickstart/development-setup).

## Maintainer

SwissOS is maintained by **Karl Rodriguez** ([karl@hostoscollective.com](mailto:karl@hostoscollective.com)).

SwissOS is a fork of [Fleetbase](https://github.com/fleetbase/fleetbase), created by Fleetbase Pte Ltd. The upstream project and its extension packages remain the work of their original authors.

## License

SwissOS is released under the [GNU Affero General Public License v3.0](LICENSE.md). You can use, modify, and self-host it freely, including to run your own commercial operations. If you modify SwissOS and make it available to others over a network, you must release those modifications under AGPL-3.0.

SwissOS is a fork of Fleetbase. Copyright in the original work is held by Fleetbase Pte Ltd and the upstream contributors; copyright in subsequent SwissOS changes is held by their respective authors. The AGPL-3.0 terms above govern the combined work.

Fleetbase Pte Ltd offers a separate commercial license for the upstream codebase. That offer is theirs to make, not ours — if you need to avoid the AGPL-3.0 obligations, take it up with [Fleetbase](https://www.fleetbase.io/licensing) directly.

Questions about SwissOS itself go to [karl@hostoscollective.com](mailto:karl@hostoscollective.com).
