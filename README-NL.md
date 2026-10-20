<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>

# Handleiding voor het gebruik van de Domainnameapi-module (WiseCP 5)

Deze module is een integratie van 'domainnameapi.com' voor WiseCP.

## 📦 Downloaden — gebruik altijd de Releases!

⬇️ **Download hier de nieuwste geteste versie: https://github.com/domainreseller/wisecp-dna-v5/releases/latest**

> ⚠️ Gebruik **niet** de groene knop **Code → Download ZIP** — die downloadt de ruwe ontwikkelbranch. Release-pakketten zijn geversioneerd, getest en klaar voor productie.

> ℹ️ Deze repository is voor **WiseCP 5**. Voor WiseCP 3.x: https://github.com/domainreseller/wisecp-dna

## Vereisten

- WiseCP 5.
- PHP 8.2 of hoger.

## Installatie

1. Plaats de map "coremio" uit het pakket in de WiseCP-installatiemap (Bijvoorbeeld: /home/wisecp/public_html). Plaats de bestanden `.gitignore` en `README.md` niet.
2. Controleer of de mapstructuur correct is (Bijvoorbeeld: /home/wisecp/public_html/coremio/modules/Registrars/DomainNameAPI/DomainNameAPI.php).
3. Open in het WiseCP-beheerpaneel **Producten → Domeinen → Domeinregistrars** en klik op de DomainNameAPI-kaart.
4. Voer uw API-gegevens in, controleer ze met **Verbinding testen** en sla op.

## Bijwerken

Plaats de map "coremio" uit het nieuwe pakket in de WiseCP-installatiemap. Uw instellingen staan in `config.php`, dat niet in het pakket zit, dus een update overschrijft ze nooit.

## Overstappen van WiseCP 3.x naar 5

De migratiewizard van WiseCP neemt de instellingen van deze module niet mee naar 5. Upload na de overstap dit pakket en voer uw API-gegevens opnieuw in onder **Producten → Domeinen → Domeinregistrars**.


### API-gegevens

1. Voer uw **Reseller ID** en **API Key** in.
2. Klik op de knop "Opslaan".

> 💡 U vindt uw **Reseller ID** en **API Key** in uw DomainNameAPI-paneel onder **API-instellingen**.
> ⚠️ Dit zijn **API-gegevens** — uw inloggegevens voor het paneel werken hier **niet**.

### Verbinding testen

1. Klik op de knop "Verbinding testen" om te controleren of de verbinding succesvol tot stand is gebracht.

## Opmerkingen

- Registraties en contactupdates stoppen met een duidelijke melding wanneer een verplicht contactveld (voornaam, e-mail, adres, plaats, land, postcode, telefoon) ontbreekt. Voor .tr-domeinen moet het T.C.-identiteitsnummer van de eigenaar (particulieren) of het belastingkantoor en belastingnummer (bedrijven) in het klantprofiel staan.

## Foutrapportage (telemetrie)

Wanneer een API-aanroep mislukt, stuurt de module een foutrapport naar de eigen fouttracker van DomainNameAPI (Sentry, op `sentry.atakdomain.com`). Een klein, willekeurig deel van de geslaagde aanroepen (4%, plus elke aanroep die langer dan 1 seconde duurt) wordt als prestatiegegeven verstuurd. Dit helpt DomainNameAPI problemen te vinden en op te lossen. Foutrapportage staat **standaard aan**.

**Wat wordt verstuurd:**

- foutcode en -melding
- pad van het aangeroepen endpoint en HTTP-methode
- duur van de aanroep
- modulenaam, bibliotheekversie en PHP-versie
- reseller-ID en domeinnaam
- het publieke IP-adres van de server (opgevraagd via `api.ipify.org`)
- het adres (URL) van de panelpagina die de aanroep veroorzaakte
- de naam van het hostingaccount op de server
- het API-verzoek en -antwoord, inclusief de contactgegevens van het domein; alleen inloggegevens worden gemaskeerd — EPP-/auth-codes, API-keys, wachtwoorden en tokens worden vervangen door `***`

**Wat nooit wordt verstuurd:** EPP-/auth-codes, API-keys, wachtwoorden of tokens in leesbare vorm; functieargumenten in stacktraces.

**Waarom en hoe lang:** de gegevens worden alleen gebruikt voor gebruiksmeting en het vroegtijdig opsporen van problemen, en worden 30 dagen bewaard op de eigen Sentry-server van DomainNameAPI, waarna ze automatisch worden verwijderd.

**Uitschakelen:** zet de instelling **Foutrapportage** uit op het DomainNameAPI-instellingenscherm (**Products → Domains → Service Providers**) en sla op. Standaard staat deze aan.

## Importeren van domein TLD's

1. Klik op het tabblad "TLD's importeren" om de domeinnaamextensies te importeren.
2. Alle extensies worden succesvol geïmporteerd.

## Importeren van domeinnamen

1. Klik op het tabblad "Importeren" om de domeinnamen te bekijken.
2. U ziet een lijst met beschikbare domeinen. Selecteer het domein dat u wilt importeren en wijs het toe aan de gewenste klant, en klik vervolgens op de knop "Importeren".

Dat is alles! U kunt nu de Domainnameapi-module succesvol gebruiken in WiseCP.



## Terugkeer- en Foutcodes met Uitleg

| Code | Uitleg                                          | Details                                                                                                                                                                     |
|------|-------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000 | Command completed successfully                  | Opdracht succesvol uitgevoerd                                                                                                                                               |
| 1001 | Command completed successfully; action pending. | Opdracht succesvol uitgevoerd; actie in behandeling                                                                                                                         |
| 2003 | Required parameter missing                      | Vereiste parameter ontbreekt. Bijvoorbeeld: Ontbrekend telefoonnummer in contactgegevens                                                                                    |
| 2105 | Object is not eligible for renewal              | Object komt niet in aanmerking voor vernieuwing, update-acties vergrendeld. Status mag niet "clientupdateprohibited" zijn. Kan te wijten zijn aan andere statusvoorwaarden. |
| 2200 | Authentication error                            | Authenticatiefout, autorisatiecode onjuist of domein is geregistreerd bij een andere registrar.                                                                             |
| 2302 | Object exists                                   | Domeinnaam of nameserver-informatie bestaat al in de database. Kan niet worden geregistreerd.                                                                               |
| 2303 | Object does not exist                           | Domeinnaam of nameserver-informatie bestaat niet in de database. Nieuwe registratie vereist.                                                                                |
| 2304 | Object status prohibits operation               | Objectstatus verbiedt de actie, updates vergrendeld. Status mag niet "clientupdateprohibited" zijn. Kan te wijten zijn aan andere statusvoorwaarden.                        |
