print("Bienvenue dans votre journal de dépenses !\n")
print("Menu:\n1. Ajouter une nouvelle dépense\n2. Voir toutes les dépenses\n3. Calculer le total et la moyenne des dépenses\n4. Effacer toutes les dépenses\n5. Quitter")
depenses = []
while True:
    Choix = (input("\nQue voulez vous faire?\n"))
    if Choix == "5":
        print("Sortir du journal. Au revoir!")
        break
    elif Choix == "1":
        print("Entrez le montant de la dépense:")
        depenses.append(float(input()))
        print("Dépense ajoutée avec succès!")
    elif Choix == "2":
        if len(depenses) == 0:
            print("Aucune dépense enregistrée pour le moment.")
        else:
            print("Vos dépenses:")
            for index,i in enumerate(depenses):
                print(f"{index+1}. {i}")
    elif Choix == "3":
        if len(depenses) == 0:
            print("Aucune dépense enregistrée pour le moment.")
        else:
            depense_totale = 0
            depense_moyenne = 0
            for i in depenses:
                depense_totale += i
                depense_moyenne = depense_totale / len(depenses)
            print(f"Dépense totale: {depense_totale}\nMoyenne des dépenses: {depense_moyenne}")
    elif Choix == "4":
        depenses.clear()
        print("Toutes les dépenses ont été effacées.")
    else:
        print("Choix invalide. Veuillez réessayer.")