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

1. Clone the repository:

```shell
git clone https://github.com/your-username/online-auction-system.git
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
3. Start Ganache, which provides a local Ethereum blockchain for development purposes. You can download Ganache from the official website: [https://www.trufflesuite.com/ganache](https://www.trufflesuite.com/ganache). Launch Ganache and make note of the RPC server address and port.

4. In the `.env` file, update the `ETHEREUM_PROVIDER` value to the Ganache RPC server address and port:

```shell
ETHEREUM_PROVIDER=http://localhost:8545
```

5. Generate a new application key:

```shell
php artisan key:generate
```

6. Run the database migrations:

```shell
php artisan migrate
```

7. Start the development server:

```shell
php artisan serve
```

8. Open your web browser and access the application at `http://localhost:8000`.

## Usage

Once the application is running, users can perform the following actions:

1. Register a new account or log in with existing credentials.
2. Create a new auction listing, specifying the item details, starting price, and duration.
3. Browse and search for available auctions.
4. Place bids on active auctions and receive real-time updates on the bidding process.
5. View transactional history and track the progress of ongoing auctions.

## Contributing

If you'd like to contribute to the Online Auction System project, please follow these steps:

1. Fork the repository on GitHub.
2. Create a new branch for your feature or bug fix.
3. Make the necessary code changes and commit them.
4. Push your branch to your forked repository.
5. Submit a pull request to the main repository.

We welcome any contributions, including bug fixes, feature enhancements, and documentation improvements.

## License

This project is licensed under the [MIT License](LICENSE).
```

Now, all the installation-related steps are grouped together under the first point of the installation section.