#def fibonacci(n):
#    if(n <= 1):
#       return n
#    else:
#        return (fibonacci(n-1) + fibonacci(n-2))

def fibonacci(number_choose, sum=1, oldsum=1, counter=1):
    if counter != number_choose:
        oldsum = sum - oldsum
        sum = sum + oldsum
        counter += 1
        return fibonacci(number_choose, sum, oldsum, counter)
    else:
        return (f"Le {number_choose}ème chiffre est égale à {sum}.")

number_choose = int(input("Quel nombre de la suite vous souhaitez connaitre ?"))

print(fibonacci(number_choose))