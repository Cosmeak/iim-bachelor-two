def BinarytoHexa_reduce(binary):
    base10 = int(binary, 2)
    print(base10)
    base16 = hex(base10)
    return base16.upper()

def BinarytoHexa_complete(binary):
    base16 = []
    temp = []
    while len(binary) > 0:
        for i in range(4):
            temp.append(binary.pop(0))
        result = int(temp[0]) * 2**3 + int(temp[1]) * 2**2 + int(temp[2]) * 2**1 + int(temp[3]) * 2**0
        temp = []
        if result == 10:
            base16.append('A')
        elif result == 11:
            base16.append('B')
        elif result == 12:
            base16.append('C')
        elif result == 13:
            base16.append('D')
        elif result == 14:
            base16.append('E')
        elif result == 15:
            base16.append('F')
        else:
            base16.append(result)
    return ('0x' + (''.join(str(elem) for elem in base16))) #Add 0x because in python it explain it's in hexadecimal

binary = list(input("What's your binary code you want to convert?"))
print(BinarytoHexa_complete(binary))