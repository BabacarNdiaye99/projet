create table commande(
    num_cde int,
    code_F int,
    Id_P int,
    date_cde date,
    primary key(num_cde),
    foreign key(Id_P) references Pharmacien(Id_P),
    foreign key(code_F) references fournisseur(code_F)
    
)

