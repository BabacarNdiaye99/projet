



create table Medicaments(
    Qr_med int,
    code_st int,
    Nom_med varchar(10),
    Notice text,
    primary key(Qr_med),
    foreign key(code_st) references stock(code_st)
)


create table stock(
    code_st int,
    Id_E int,
    Id_P int,
    Qte_st int,
    foreign key(Id_E) references Employee(Id_E),
    foreign key(Id_P) references Pharmacien(Id_P)

)


create table commande(
    num_cde int,
    code_F int,
    Id_P int,
    date_cde date,
    primary key(num_cde),
    foreign key(Id_P) references Pharmacien(Id_P),
    foreign key(code_F) references fournisseur(code_F)
    
)


