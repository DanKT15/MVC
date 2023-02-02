import pygame as py
import sys

py.init()
screen = py.display.set_mode((400,300))

while True:
    for ev in py.event.get():

        if ev.type == py.MOUSEBUTTONUP:
            pos = py.mouse.get_pos()
            col = (0, 255, 255)
            py.draw.circle(
                screen, col, pos, 20, 5
            )
            py.display.update()

        if ev.type == py.QUIT:
            py.quit()
            sys.exit()