import random

def generate_list(number_demand, list=[]):
    for i in range(0, number_demand):
        list.append(random.randint(1, 500))
    return bubble_sort(list)

def bubble_sort(list):
    len_list = len(list)
    for i in range(len_list - 1): #Pour revenir en arrière et remettre un élèment plus petit de fin de liste de retour en début de liste
        for j in range(len_list - i - 1): #On parcourt l'entièreté de la liste
            if list[j] > list[j+1]:
                list[j], list[j+1] = list[j+1], list[j]
        print(list)
    return list


numbers_demand = int(input("How many numbers you want in list?"))

print(f"List sorted is : {generate_list(numbers_demand)}")