import random

def passwordGenerator(lenght):
    caracters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789"
    password = []
    for i in range(lenght):
        password.append(caracters[random.randint(0, len(caracters) - 1)])
    return ''.join(str(carac) for carac in password)

lenght = int(input('How many caracters you need in your password? (Please enter an integer)'))

print(f'Your password: {passwordGenerator(lenght)}')