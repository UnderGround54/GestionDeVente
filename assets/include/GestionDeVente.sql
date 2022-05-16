/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  25/09/2018 07:58:17                      */
/*==============================================================*/


drop table if exists CLIENT;

drop table if exists COMMANDECLI;

drop table if exists COMMANDEFRS;

drop table if exists FOURNISSEUR;

drop table if exists LIGNECOMCLI;

drop table if exists LIGNECOMFRS;

drop table if exists PRODUIT;

/*==============================================================*/
/* Table : CLIENT                                               */
/*==============================================================*/
create table CLIENT
(
   codeCli              varchar(11) not null,
   nomCli              char(55),
   adresseCli           char(55),
   primary key (codeCli)
);

/*==============================================================*/
/* Table : COMMANDECLI                                          */
/*==============================================================*/
create table COMMANDECLI
(
   numComCli           varchar(11) not null,
   codeCli              varchar(11) not null,
   dateComCli      date,
   primary key (numComCli)
);

/*==============================================================*/
/* Table : COMMANDEFRS                                          */
/*==============================================================*/
create table COMMANDEFRS
(
   numComFrs     varchar(11) not null,
   codeFrs             varchar(11) not null,
   dateComFrs      date,
   primary key (numComFrs)
);

/*==============================================================*/
/* Table : FOURNISSEUR                                          */
/*==============================================================*/
create table FOURNISSEUR
(
   codeFrs              varchar(11) not null,
   nomFrs               char(55),
   adresseFrs         char(55),
   primary key (codeFrs)
);

/*==============================================================*/
/* Table : LIGNECOMCLI                                          */
/*==============================================================*/
create table LIGNECOMCLI
(
   numComCli           varchar(11) not null,
   codePro              varchar(11) not null,
   QteAppro           int not null,
   KEY FK_LIGNECOMCLI (codePro),
   KEY FK_LIGNECOMCLI2 (numComCli),
   primary key (numComCli, CodePro)
);

/*==============================================================*/
/* Table : LIGNECOMFRS                                          */
/*==============================================================*/
create table LIGNECOMFRS
(
   numComFrs       varchar(11) not null,
   codePro              varchar(11) not null,
   QteCom              int not null,
   KEY FK_LIGNECOMFRS (codePro),
   KEY FK_LIGNECOMFRS2 (numComFrs),
   primary key (numComFrs, codePro)
);

/*==============================================================*/
/* Table : PRODUIT                                              */
/*==============================================================*/
create table PRODUIT
(
   codePro              varchar(11) not null,
   design               varchar(50),
   pu                   double,
   stock                float,
   primary key (codePro)
);

alter table COMMANDECLI add constraint FK_RELATION_3 foreign key (codeCli)
      references CLIENT (codeCli) on delete cascade on update cascade;

alter table COMMANDEFRS add constraint FK_RELATION_4 foreign key (codeFrs)
      references FOURNISSEUR (codeFrs) on delete cascade on update cascade;

alter table LIGNECOMCLI add constraint FK_LIGNECOMCLI foreign key (codePro)
      references PRODUIT (codePro) on delete cascade on update cascade;

alter table LIGNECOMCLI add constraint FK_LIGNECOMCLI2 foreign key (numComCli)
      references COMMANDECLI (numComCli) on delete cascade on update cascade;

alter table LIGNECOMFRS add constraint FK_LIGNECOMFRS foreign key (codePro)
      references PRODUIT (codePro) on delete cascade on update cascade;

alter table LIGNECOMFRS add constraint FK_LIGNECOMFRS2 foreign key (numComFrs)
      references COMMANDEFRS (numComFrs) on delete cascade on update cascade;

