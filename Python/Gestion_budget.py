"""Écrivez un programme qui reçoit trois entrées:

1.Une liste de prix
2.Une liste de noms d'articles
3.Un budget par article

Le programme doit afficher :

    •Une liste d'articles que vous pouvez vous permettre avec votre budget
    •Quel budget auriez-vous besoin si vous achetiez tous les articles abordables
    •Combien d'articles vous ne pouviez pas vous permettre"""
    
print("C'est l'heure de voir ce qu'on peut se permettre d'acheter!")
print("Rentrez les prix des articles à potentiellement acheter (séparés par une virgule).\n")
prix = input().split(",")
print("Maintenant, rentrez les noms des articles (toujours séparés par une virgule).\n")
for i in range(len(prix)):
    prix[i] = int(prix[i])
items = input().split(",")
print("Enfin, rentrez votre budget max pour chaque article à acheter.\n")
budget_par_article = int(input())

articles_abordables = []
trop_cher = 0
cout_total = 0

for i in range(len(prix)):
    if prix[i] <= budget_par_article:
        articles_abordables.append(items[i])
        cout_total += prix[i]
    else:
        trop_cher += 1

print("Vous pouvez acheter:", articles_abordables)
print("Budget total dont vous avez besoin:", cout_total)
print("Nombre d'articles trop chers:", trop_cher)
