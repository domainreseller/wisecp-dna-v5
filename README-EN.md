<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# README for Domainnameapi Module (WiseCP 5)

This module is an integration of 'domainnameapi.com' for WiseCP. 

## 📦 Download — always use Releases!

⬇️ **Get the latest tested version here: https://github.com/domainreseller/wisecp-dna-v5/releases/latest**

> ⚠️ Do **not** use the green **Code → Download ZIP** button — that downloads the raw development branch. Release packages are versioned, tested and production-ready.

> ℹ️ This repository is for **WiseCP 5**. On WiseCP 3.x use: https://github.com/domainreseller/wisecp-dna

## Requirements

- WiseCP 5.
- PHP 8.2 or higher.
- The PHP Soap extension, if you connect with legacy (SOAP) API credentials.

## Installation

1. Copy the "coremio" folder from the package into the folder where WiseCP is installed (e.g., /home/wisecp/public_html). Do not include the `.gitignore` and `README.md` files.
2. Ensure that the folder structure is correct. For example: /home/wisecp/public_html/coremio/modules/Registrars/DomainNameAPI/DomainNameAPI.php.
3. In the WiseCP admin panel open **Products → Domains → Domain Name Registrars** and click the DomainNameAPI card.
4. Enter your API credentials, verify them with **Test Connection**, then save.

## Update

Copy the "coremio" folder from the new package into the folder where WiseCP is installed. Your settings live in `config.php`, which the package does not ship, so an update never overwrites them.

## Upgrading from WiseCP 3.x to 5

WiseCP's migration wizard does not carry this module's settings over to 5. After the upgrade, upload this package and enter your API credentials again under **Products → Domains → Domain Name Registrars**.


### Reseller User Credentials

1. Enter the reseller username and password.
2. Click the "Save" button.

## 🔑 API Credentials — Username/Password or Reseller ID/API Key?

Both are supported — enter them into the same two module fields; the module detects which API to use automatically:

| You have | "Username" field | "Password" field | API used |
|---|---|---|---|
| **New panel credentials** (recommended) | Reseller ID — UUID like `xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx` | API Key | REST |
| **Legacy credentials** | API username | API password | SOAP |

> 💡 Find your **Reseller ID** and **API Key** in your DomainNameAPI panel under **API Settings**.
> ⚠️ These are **API credentials** — your panel login e-mail and password will **not** work here.

No extra configuration is needed — if the username field contains a UUID the module uses the modern REST API, otherwise classic SOAP.

### Test Connection

1. Click the "Test Connection" button to check if the connection is successfully established.

## Importing Domain TLDs

1. Click on the "Import TLDs" tab to import the domain name extensions.
2. All the extensions will be imported successfully.

## Importing Domain Names

1. Click on the "Import" tab to import the domain names.
2. You will see a list of domains. Select the domain you want to import and assign it to the desired customer. Then click the "Import" button.

That's it! You can now successfully use the Domainnameapi module in WiseCP.



## Return and Error Codes with Explanations

| Code | Explanation                                     | Details                                                                                                                                        |
|------|-------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Command completed successfully                                                                                                                 |
| 1001 | Command completed successfully; action pending. | Command completed successfully; action pending                                                                                                 |
| 2003 | Required parameter missing                      | Required parameter missing. For example: Missing phone number in contact information                                                           |
| 2105 | Object is not eligible for renewal              | Object is not eligible for renewal, update actions locked. Status must not be "clientupdateprohibited". May be due to other status conditions. |
| 2200 | Authentication error                            | Authentication error, authorization code incorrect, or domain is registered with another registrar.                                            |
| 2302 | Object exists                                   | Domain name or nameserver information already exists in the database. Cannot be registered.                                                    |
| 2303 | Object does not exist                           | Domain name or nameserver information does not exist in the database. New registration required.                                               |
| 2304 | Object status prohibits operation               | Object status prohibits the action, updates locked. Status must not be "clientupdateprohibited". May be due to other status conditions.        |

