import random

system = input("Do you want Visa or Mastercard? (wrote the entire word)").lower()

def cardGenerator(system):
    imei =[]
    if system == "visa" :
        imei.append(4)
    elif system == "mastercard":
        imei.append(5)
    return ''.join(str(elem) for elem in (generate_list(14, imei)))

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
        return "IMEI is Ok !"
    else:
        return "IMEI isn't good !"



print(f"Your card number is: {cardGenerator(system)}")