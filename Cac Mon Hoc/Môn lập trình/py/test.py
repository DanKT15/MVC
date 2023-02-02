# import pygame
# pygame.init()
# dis=pygame.display.set_mode((400,300))
# pygame.display.update()
# pygame.display.set_caption('Snake game by Edureka')
# game_over=False
# while not game_over:
#     for event in pygame.event.get():
#         print(event)   #in ra tất cả các hành động xuất hiện trên màn hình
#
# pygame.quit()
# quit()




# import pygame, sys
# from pygame.locals import *

# pygame.init()

# DISPLAYSURF = pygame.display.set_mode((400, 300))
# pygame.display.set_caption('Hello world!')

# while True:
#     for event in pygame.event.get():
#         if event.type == QUIT:
#             pygame.quit()
#             sys.exit()




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