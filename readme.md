# Repository- / Service-Pattern

Ein allgemeines Repository- / Service-Pattern (Service-Layer), das eine Abstraktionsebene zwischen der Anwendungslogik 
und der Datenbankzugriffsschicht bietet. Fördert die Flexibilität und Wiederverwendbarkeit des Codes und bietet eine
lose Kopplung zwischen den Komponenten.

Implementiert wird ein einfaches, aber robustes System zur Verwaltung von Daten über eine RESTful API. Durch die 
Verwendung des Laravel Frameworks bietet die API eine strukturierte und effiziente Möglichkeit, CRUD-Operationen 
(Create, Read, Update, Delete) durchzuführen.

## Informationen
- Der Ordner `standard` implementiert kein Route-Model-Binding.
- Der Ordner `route-model-binding` implementiert dieses und bietet zusätzlichen Überprüfungen, ob ein Eintrag in der
  Datenbank existiert. Im Weiteren wird fur die Implementierung des Route-Model-Binding nicht explizit ein Constructor
  benötigt. Dieser wird erforderlich, sobald z.B. ein Logger implementiert wird.
- Beachte die Kommentare im Code.

## Komponenten im Überblick
- GenericController: Ein universeller Controller, der für die Handhabung von HTTP-Anfragen zuständig ist. Er nutzt den 
DataService für Datenoperationen.
- DataServiceInterface: Definiert die Vertragsmethoden für Datenzugriffsoperationen, um eine konsistente Schnittstelle 
für den GenericController zu bieten.
- DataService: Implementiert das DataServiceInterface und führt tatsächliche Datenbankoperationen durch, isoliert von
der Anwendungslogik.
- Routen: Definiert in web.php, verbinden HTTP-Anfragen mit den entsprechenden Methoden im GenericController.


## Lizenz

Dieses Projekt ist unter der MIT-Lizenz veröffentlicht. Weitere Details finden Sie in der LICENSE-Datei.
