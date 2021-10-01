import random
import datetime

def is_sorted(array):
    return array == sorted(array)

def bogoSort(array, n=0):
    if is_sorted(array):
        return n
    else:
        n += 1
        random.shuffle(array)
        print(array, n)
        return bogoSort(array, n)

def sorted_list(nb_in_list, list=[]):
    xstart = datetime.datetime.now()
    start = int(xstart.strftime("%f"))
    for i in range(0, nb_in_list):
        list.append(random.randint(1, 501))
    xend = datetime.datetime.now()
    end = int(xend.strftime("%f"))
    counter = bogoSort(list)
    time = end - start
    return f"List was create and sorted in {time}ms and need {counter} to be sorted."

nb_in_list = int(input("How many numbers you want in list?"))

print(sorted_list(nb_in_list))

