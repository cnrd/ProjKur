DROP TABLE MedlemsDatabase;
DROP TABLE HoldDatabase;
DROP TABLE LogInDatabase;
DROP TABLE MereInfo;
DROP TABLE KontaktPersonen;
DROP TABLE Betaling;

CREATE TABLE MedlemsDatabase(
  fornavn VARCHAR(40) NOT NULL,
  efternavn VARCHAR(40) NOT NULL,
  medlemsemail VARCHAR(100) PRIMARY KEY,
  telefon NUMBER(8,0) NOT NULL
);
  
CREATE TABLE HoldDatabase(
  holdnavn VARCHAR(30),
  holdemail VARCHAR(100),
  startDato DATE,
  PRIMARY KEY(holdnavn,holdemail)
);

CREATE TABLE LogInDatabase(
  logInEmail VARCHAR(100),
  password VARCHAR(100),
  PRIMARY KEY(logInEmail,password)
);

CREATE TABLE MereInfo(
  infoEmail VARCHAR(100) PRIMARY KEY,
  foedselsdato DATE NOT NULL,
  adresse VARCHAR(100) NOT NULL,
  postnummer NUMBER(4,0) NOT NULL,
  byen VARCHAR(50) NOT NULL,
  yderligereInfo VARCHAR(300),
  godkendt VARCHAR(3) DEFAULT 'nej'
);

CREATE TABLE KontaktPersonen(
  konNavn VARCHAR(70) NOT NULL,
  konTelefon NUMBER(8,0) NOT NULL,
  konEmail VARCHAR(100) NOT NULL,
  konForEmail VARCHAR(100) PRIMARY KEY
);

CREATE TABLE Betaling(
  betalingsemail VARCHAR(100) PRIMARY KEY,
  status VARCHAR(3) DEFAULT 'nej',
  betalingsdato DATE
);


