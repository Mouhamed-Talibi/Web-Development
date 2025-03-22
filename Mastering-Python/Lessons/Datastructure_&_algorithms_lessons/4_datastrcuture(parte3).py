"graph"
# graph using adjacency matrix :

class graph:
    def __init__(self):
        self.nodes = set()
        self.edges = []
        
    def add_edge(self, u , v, weight):
        self.edges.append((u , v, weight))
        
    def display(self):
        if len(self.edges) == len(self.nodes):
            print("Nodes => ", self.nodes)
            print("Edges => ", self.edges)
        else:
            print("Sorry, should the number of nodes equal the number of edges !")
        
g = graph()

g.nodes.add(0)
g.nodes.add(1)
g.nodes.add(2)
g.nodes.add(3)
g.nodes.add(4)

g.add_edge(2, 5, 7)
g.add_edge(3, 8, 1)
g.add_edge(4, 7, 0)
g.add_edge(5, 0, 9)
g.add_edge(7, 5, 9)

g.display()
print("=" * 25)
# ---------------------------------------------------------------------------

"Graph impllementation by Adjacency matrix Class"
class Graph:
    def __init__(self, size) :
        self.adjmatrix = []
        for x in range(size):
            self.adjmatrix.append([0] * size)
        self.size = size
        
    def add_edge(self, v1, v2):
        if v1 == v2 :
            print(f"{v1} and {v2}Are The Same vertex ") 
            return 
        self.adjmatrix[v1][v2] = 1
        self.adjmatrix[v2][v1] = 1  
        
    def remove_edge(self, v1, v2):
        if self.adjmatrix[v1][v2] == 0 :
            print(f"No edges Between {v1}  and {v2}")  
            return  
        self.adjmatrix[v1][v2] = 0
        self.adjmatrix[v1][v2] = 0
        
    def len(self):
        print(f"the Size of the graph or the number of vertices is : {self.size}"  )  
    
    def display(self):
        for row in self.adjmatrix:
            for val in row:
                print(f"{val:4}", end = " ")
            print()
              
# exemple usage:
x = Graph(5)

x.add_edge(2, 4)
x.add_edge(1, 2)
x.add_edge(1, 3)  
x.add_edge(4, 0)
x.add_edge(3, 1)

x.display()
x.len()

x.remove_edge(1, 3)
x.remove_edge(3, 1)
x.display()
x.len()



