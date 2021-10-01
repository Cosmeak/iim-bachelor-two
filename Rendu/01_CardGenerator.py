system = input("Do you want Visa or Mastercard? (wrote the entire word)").lower()

def cardGenerator(system):
    imei =[]
    if system == "visa" :
        imei.append(4)
    elif system == "mastercard":
        imei.append(5)

    return imei



print(f"Your card number is: {cardGenerator(system)}")