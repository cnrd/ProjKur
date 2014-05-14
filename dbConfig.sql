CREATE TABLE IF NOT EXISTS Website.MedlemsDatabase(
  fornavn VARCHAR(40) NOT NULL,
  efternavn VARCHAR(40) NOT NULL,
  medlemsemail VARCHAR(100) PRIMARY KEY,
  telefon INT(8) NOT NULL
);

CREATE TABLE IF NOT EXISTS Website.HoldDatabase(
  holdnavn VARCHAR(30),
  holdemail VARCHAR(100),
  startDato DATE,
  PRIMARY KEY(holdnavn,holdemail)
);

CREATE TABLE IF NOT EXISTS Website.LogInDatabase(
  logInEmail VARCHAR(100),
  password VARCHAR(100),
  isAdmin INT(1),
  PRIMARY KEY(logInEmail,password)
);

CREATE TABLE IF NOT EXISTS Website.MereInfo(
  infoEmail VARCHAR(100) PRIMARY KEY,
  foedselsdato DATE NOT NULL,
  adresse VARCHAR(100) NOT NULL,
  postnummer INT(4) NOT NULL,
  byen VARCHAR(50) NOT NULL,
  yderligereInfo VARCHAR(300),
  godkendt VARCHAR(3) DEFAULT 'nej'
);

CREATE TABLE IF NOT EXISTS Website.KontaktPersonen(
  konNavn VARCHAR(70) NOT NULL,
  konTelefon INT(8) NOT NULL,
  konEmail VARCHAR(100) NOT NULL,
  konForEmail VARCHAR(100) PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS Website.Betaling(
  betalingsemail VARCHAR(100) PRIMARY KEY,
  status VARCHAR(3) DEFAULT 'nej',
  betalingsdato DATE
);

CREATE TABLE IF NOT EXISTS Website.BrugerHold(
  fornavn VARCHAR(40) REFERENCES Website.MedlemsDatabase(fornavn),
  efternavn VARCHAR(40) REFERENCES Website.MedlemsDatabase(efternavn),
  holdnavn VARCHAR(30),
  holdemail VARCHAR(100),
  CONSTRAINT fk_column
  FOREIGN KEY (holdnavn,holdemail) REFERENCES Website.HoldDatabase(holdnavn,holdemail),
  PRIMARY KEY (fornavn,efternavn,holdnavn,holdemail)
);
