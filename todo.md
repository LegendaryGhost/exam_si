# Simulation de prêt

- [x] Repo GitHub
  - [x] Creation du repo (5 min)
  - [x] Invitation de l'equipe sur le repo (2 min)

- [x] Page de connexion
  - [x] Affichage
    - [x] Creation du template Codeigniter
    - [x] Formulaire(email, mot_de_passe)
  - [x] Fonction (Modèle)
    - [x] Configuration de la connexion à la base de données (3 min)
    - [x] UtilisateurModel
      - [x] login(email, mot_de_passe) (5 min)
  - [x] Donnees (SQL)
    - [x] Création de la base MySQL (1 min)
    - [x] utilisateur(id, nom, email, mot_de_passe) (3 min)
  - [x] Integration
    - [x] Controlleur Utilisateur
      - [x] index() (15 min)
      - [x] traitement_login() (5 min)
      - [x] deconnexion() (10 min)
    - [x] Action du formulaire (traitement du login) (10 sec)

- [x] Page d'inscription
  - [x] Affichage
  - [x] Fonction (Modèle)
    - [x] UtilisateurModel
      - [x] inscription(email, mot_de_passe)
  - [x] Donnees (SQL)
    - [x] utilisateur
  - [x] Integration
    - [x] action du formulaire (traitement de l'inscription)

- [ ] Page de creation de simulation de prêt
  - [x] Affichage
    - [x] Formulaire(montant, teg, duree_mois, date_debut)
  - [ ] Fonction (Modèle)
    - [ ] PretModel
      - [ ] ajouter(montant, teg, duree_mois, date_debut)
  - [ ] Donnees (SQL)
    - [ ] Arranger pour prendre en compte le decalage du 1er mois(
        2 => pas de remboursement les 2 1ers mois mais il y a des interets
    )
    - [ ] pret(id, id_utilisateur, nom, montant, teg, duree_mois, date_debut)
    - [x] amortissement(
          id,
          id_pret,
          numero_mensualite,
          date_versement,
          solde_initial,
          mensualite,
          capital_rembourse,
          interet,
          capital_restant
    )
  - [ ] Integration
    - [ ] action du formulaire (traitement de la creation de la simulation du pret)

- [ ] Page de la liste des simulations de prêts
  - [ ] Affichage
    - [ ] Liste(tableau) des prêts
  - [ ] Fonction
    - [ ] PretModel
      - [ ] liste()
  - [ ] Donnees
    - [ ] pret
  - [ ] Integration

  - [ ] Page des détails d'un prêt
    - [ ] Affichage
      - [ ] Information generales (
            nom,
            montant,
            teg,
            duree_mois,
            date_debut,
            mensualite,
            cout_credit,
            cout_total
      )
      - [ ] Tableau d'amortissement (cf amortissement)
    - [ ] Fonction
      - [ ] PretModel
        - [ ] trouver(id)
      - [ ] AmortissementModel
        - [ ] trouver_par_pret(id_pret)
    - [ ] Donnees
      - [ ] pret
      - [ ] amortissement
    - [ ] Integration