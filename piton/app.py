from flask import Flask, request, jsonify
from PIL import Image
import numpy as np
from sklearn.cluster import KMeans
import matplotlib.pyplot as plt
# from flask_sqlalchemy import SQLAlchemy
from flaskext.mysql import MySQL

# app = Flask(__name__)

# @app.route('/generate-color-palette', methods=['POST'])

# def generate_color_palette():
#     # Memvalidasi dan memuat gambar dari permintaan POST
#     print("sampe sini")
#     # if 'image' in request.files:
#         # image_file = request.files['image']
#     image_file = 'public/Asset/buto.png'
#     print("sampe ama")
#     image = Image.open(image_file)
#     print("sampe amaaaa")
#     image_np = np.array(image)
#     print("sampe amaaaaaa")
#     print(image_np)

#     # Mereshape gambar menjadi array piksel
#     pixels = image_np.reshape(-1, 3)

#     # Melakukan K-means clustering
#     num_colors = 5  # Ubah sesuai kebutuhan
#     kmeans = KMeans(n_clusters=num_colors, random_state=42)
#     kmeans.fit(pixels)

#     # Mendapatkan nilai RGB dari pusat cluster
#     colors = kmeans.cluster_centers_

#     # Mengubah nilai RGB menjadi kode warna heksadesimal
#     color_palette = ['#%02x%02x%02x' % (int(color[0]), int(color[1]), int(color[2])) for color in colors]
#     for i, color_code in enumerate(color_palette):
#         print(f"Centroid {i+1}: {color_code}")

#     # fig, axs = plt.subplots(1, len(color_palette), figsize=(len(color_palette), 1))
#     # for i, color in enumerate(color_palette):
#     #     axs[i].imshow([[color]])
#     #     axs[i].axis('off')
#     # plt.show()
#     return jsonify(color_palette)

# if __name__ == '__main__':
#     app.run(debug=True)


# app.py

# from flask import Flask, request, jsonify
# from PIL import Image
# import numpy as np
# from sklearn.cluster import KMeans

app = Flask(__name__)
mysql = MySQL(app)
app.config['MYSQL_DATABASE_HOST'] = 'localhost'
app.config['MYSQL_DATABASE_USER'] = 'root'
app.config['MYSQL_DATABASE_PASSWORD'] = ''
app.config['MYSQL_DATABASE_DB'] = 'projectwebprog'
mysql.init_app(app)
# mysql.init_app(app)
# conn = mysql.connect()
# cursor = conn.cursor()
# app.config['SQLALCHEMY_DATABASE_URI'] = 'mysql+pymysql://root:@localhost/projectwebprog'
# db = SQLAlchemy(app)

@app.route('/generate-color-palette', methods=['POST'])
def generate_color_palette():
    conn = mysql.connect()
    cursor = conn.cursor()
    # if 'image' in request.files:
    # ddd(image_path)
    # image_path = request.files['image_path']
    # print(image_path)
    # print('1')
    # image_path =request.files.get('image_path')
    # print(image_path)
    # image_file = request.open(image_path)
    # print('2')
    # print(image_file)
    # print('3')
    query = "SELECT path FROM photos WHERE id = %s"
    print('1')
    value = (1,)
    print('2')
    cursor.execute(query, value)
    print('3')
    image_file = cursor.fetchone()
    print('4')
    print(image_file[0])
    # image_file= image_path.path
    num_colors = 5

    # Load image
    image_path = "public/storage/"+image_file[0]
    imageP = plt.imread(image_path)
    # print(image)
    # # Reshape the image to a 2D array of pixels
    # pixels = image.reshape(-1, 3)
    # print(pixels)
    # print("aaaaaaaaaaaaaaaaaaaaaaaaaaaaa")

    # # Perform K-means clustering
    # kmeans = KMeans(n_clusters=num_colors, random_state=42)
    # kmeans.fit(pixels)

    # # Get the RGB values of the cluster centers
    # colors = kmeans.cluster_centers_

    # # Convert RGB values to 8-bit integers
    # colors = colors.astype(int)

    image = Image.open(image_path)
    print('5')
    image_array = np.array(image)

    # Reshape array to 2D for clustering
    image_flat = image_array.reshape((-1, 3))

    # Perform KMeans clustering with 8 clusters
    kmeans = KMeans(n_clusters=5, random_state=30, n_init=10).fit(image_flat)

    # Get cluster labels and centroids
    #label = nampung
    #centrodi titk tengah dr cluster
    labels = kmeans.labels_
    centroids = kmeans.cluster_centers_

    # Create color palette with centroids
    palette = np.uint8(centroids)

    # Convert RGB values to hexadecimal color codes
    color_codes = ['#%02x%02x%02x' % (color[0], color[1], color[2]) for color in palette]
    for i, color_code in enumerate(color_codes):
        print(f"Centroid {i+1}: {color_code}")
    cursor.close()
    conn.close()
    return jsonify(color_codes)

if __name__ == '__main__':
    app.run(debug=True)
