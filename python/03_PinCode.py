import hashlib

def pinCode(password_hash):
    temp = 8 * [0]
    for a in range(0,9):
        temp[0] = a
        for b in range(0,9):
            temp[1] = b
            for c in range(0,9):
                temp[2] = c
                for d in range(0,9):
                    temp[3] = d
                    for e in range(0,9):
                        temp[4] = e
                        for f in range(0,9):
                            temp[5] = f
                            for g in range(0,9):
                                temp[6] = g
                                for h in range(0,9):
                                    temp[7] = h
                                    check = ''.join(str(number) for number in temp)
                                    if hashlib.md5((check).encode()).hexdigest() == password_hash:
                                        return temp

password_hash = input("What's your password hashed?")

print(f"Your password has been cracked ! it's {pinCode(password_hash)}")