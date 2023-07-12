You're right, it would be more convenient to group all the installation-related steps together. Here's an updated version of the Markdown file with the installation steps consolidated:

```markdown
# Online Auction System using Blockchain

Welcome to the Online Auction System project! This system utilizes blockchain technology to create a secure and transparent platform for conducting online auctions.

## Table of Contents

- [Description](#description)
- [Features](#features)
- [Technologies](#technologies)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Description

The Online Auction System is a web application developed using Laravel, a popular PHP framework. It provides a platform for users to create and participate in auctions. The system leverages blockchain technology, specifically Ethereum, to ensure the immutability and transparency of the bidding process, making it highly secure and trustworthy.

## Features

- User registration and authentication
- Creation of auction listings
- Bidding on auctions
- Real-time bidding updates
- Automated auction closing
- Transactional history and tracking
- Secure blockchain-based verification

## Technologies

The project utilizes the following technologies:

- **Laravel**: A PHP web framework for building the application.
- **Ganache**: A personal blockchain for Ethereum development, used for local development and testing.
- **HTML/CSS**: Front-end design and layout of the web application.
- **JavaScript**: Enhancing user interactions and real-time updates.
- **MySQL**: Database management system for storing user and auction data.

## Installation

To run the Online Auction System project on your local machine, follow these steps:

1. Clone the repository and install the project dependencies:

```shell
git clone https://github.com/your-username/online-auction-system.git
cd online-auction-system
composer install
```

2. Configure the database connection in the `.env` file:

```shell
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password (optional)
```