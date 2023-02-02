class nhanvien:
    
    def __init__(this, ten, tuoi):
        this.ten = ten
        this.tuoi = tuoi

class quanli:
    
    danhsach = []
    
    def add (this):
        ten = input("nhap ten nv:")
        tuoi = int(input("nhap tuoi nv:"))
        nv = nhanvien(ten, tuoi)
        this.danhsach.append(nv)
        
    def getnv(this):
        return this.danhsach
        
    def showdanhsach(this):
        print("{} {}".format("Ten", "Tuoi"))
        if this.getnv().__len__() > 0:
            for nv in this.getnv():
                print("{} {}".format(nv.ten, nv.tuoi))





soluong = int(input("nhap so luong nv:"))
nv = quanli();

for x in range(1, soluong+1):
    print("Nhan Vien Thu: {}".format(x))
    nv.add()

print("Danh Sach Nhan Vien:")
nv.showdanhsach()
    
