# Simulation de prêt

- [x] Repo GitHub
  - [x] Creation du repo (5min)
  - [x] Invitation de l'equipe sur le repo (2min)

- [ ] Page de connexion
  - [ ] Affichage
    - [ ] Creation du template Codeigniter
    - [ ] Maquette de la page de connexion
    - [ ] Formulaire(email, mot_de_passe)
  - [ ] Fonction (Modèle)
    - [ ] UtilisateurModel
      - [ ] login(email, mot_de_passe)
  - [ ] Donnees (SQL)
    - [ ] utilisateur(id, email, mot_de_passe)
  - [ ] Integration
    - [ ] action du formulaire (traitement du login)

- [ ] Page d'inscription
  - [ ] Affichage
  - [ ] Fonction (Modèle)
    - [ ] UtilisateurModel
      - [ ] inscription(email, mot_de_passe)
  - [ ] Donnees (SQL)
    - [ ] utilisateur
  - [ ] Integration
    - [ ] action du formulaire (traitement de l'inscription)

- [ ] Page de creation de simulation de prêt
  - [ ] Affichage
    - [ ] Maquette de la page de creation de simulation
    - [ ] Formulaire(montant, teg, duree_mois, date_debut)
  - [ ] Fonction (Modèle)
    - [ ] PretModel
      - [ ] ajouter(montant, teg, duree_mois, date_debut)
  - [ ] Donnees (SQL)
    - [ ] pret(id, id_utilisateur, nom, montant, teg, duree_mois, date_debut)
    - [ ] amortissement(
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