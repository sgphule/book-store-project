#
# Table structure for table 'tx_bookstoreapp_domain_model_book'
#
CREATE TABLE tx_bookstoreapp_domain_model_book (

	isbn varchar(255) DEFAULT '' NOT NULL,
	title varchar(255) DEFAULT '' NOT NULL,
	blurb text,
	description text,
	price double(11,2) DEFAULT '0.00' NOT NULL,
	pages int(11) DEFAULT '0' NOT NULL,
	images int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_topic'
#
CREATE TABLE tx_bookstoreapp_domain_model_topic (

);

#
# Table structure for table 'tx_bookstoreapp_domain_model_author'
#
CREATE TABLE tx_bookstoreapp_domain_model_author (

);
