# Este exemplo exige que o OpenCV esteja instalado
from cv2 import *
# inicializa a camera
cam = VideoCapture(0)   # 0 -> indice da camera
s, img = cam.read()
if s:    # frame capturado sem erros
    namedWindow("cam-test",CV_WINDOW_AUTOSIZE)
    imshow("cam-test",img)
    waitKey(0)
    destroyWindow("cam-test")
    imwrite("exemplo.jpg",img) #salvar imagem
