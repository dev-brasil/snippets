# Estimativa de pi usando variaveis aleatorias
import random as r

inside  = 0
outside = 0

for i in range(0,1000000):
    # Escolha um ponto aleatoriamente
    # dentro do quadrado (-1,1)x(-1,1)
    x = r.uniform(-1, 1)
    y = r.uniform(-1, 1)

    # Verifique se o ponto cai dentro
    # do circulo de raio 1 e centro na
    # origem
    if (x**2 + y**2 < 1):
        inside  += 1
    else:
        outside += 1

# A probabilidade de um ponto cair
# dentro do circulo e' proporcional
# a area do circulo. O numero de
# pontos que caem dentro do circulo
# sobre o total e' o quociente das areas.
# A area do circulo e'pi e a do quadrado
# e' 4
pi = 4.0*inside/(inside + outside)

print pi
