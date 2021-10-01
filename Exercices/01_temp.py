temp = float(input("What's your temp?"))

if temp < 36:
    print("Hypothermia")
elif temp >= 36 and temp < 38:
    print("Ok")
else:
    print("Fever")