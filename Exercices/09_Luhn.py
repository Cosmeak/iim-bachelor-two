def luhn(IMEI):
    n = 0
    total = 0
    while len(IMEI) > 0:
        temp = int(IMEI.pop())
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


IMEI = list(input("Enter your IMEI number:"))

print(luhn(IMEI))