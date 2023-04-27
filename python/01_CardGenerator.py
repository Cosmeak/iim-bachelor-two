import random
import copy

system = input("Do you want Visa or Mastercard? (write the entire word)").lower()

def cardGenerator(system):
    imei =[]
    if system == "visa" :
        imei.append(4)
    elif system == "mastercard":
        imei.append(5)
    imei = generate_list(14, imei)
    imei.append(0)
    temp = copy.copy(imei)
    if luhn(temp) == True:
        return ''.join(str(elem) for elem in imei)
    else:
        last_number = 10 - luhn(temp)
        imei.pop()
        imei.append(last_number)
        return ''.join(str(elem) for elem in imei)

def generate_list(number_demand, list=[]):
    for i in range(0, number_demand):
        list.append(random.randint(1, 9))
    return list

def luhn(imei):
    n = 0
    total = 0
    while len(imei) > 0:
        temp = int(imei.pop())
        if n == 1:
            temp *= 2
            if temp > 9:
                total += temp - 9
                n = 0
            else:
                total += temp
                n = 0
        else:
            total += temp
            n = 1
    if total%10 == 0:
        return True
    else:
        return total%10


print(f"Your card number is: {cardGenerator(system)}")