import random

numbers = [500, 32, 45, 56, 800]


def bogoSort(array, n=0):
    if array == sorted(array):
        return n
    else:
        n += 1
        random.shuffle(array)
        return bogoSort(array, n)


print(f"It's sorted after {bogoSort(numbers)} attempts !")