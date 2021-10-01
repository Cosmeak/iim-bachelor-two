def volume(w, l, h):
    return w*l*h / 1000000

width = float(input("Largeur en cm:"))
lenght = float(input("Longueur en cm:"))
height = float(input("Hauteur en cm:"))

print(f"cela fait {volume(width, lenght, height)} m3")