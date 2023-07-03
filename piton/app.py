# from flask import Flask, request, jsonify
# from PIL import Image
# import numpy as np
# from sklearn.cluster import KMeans
# import matplotlib.pyplot as plt

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

from flask import Flask, request, jsonify
from PIL import Image
import numpy as np
from sklearn.cluster import KMeans

app = Flask(__name__)

@app.route('/generate-color-palette', methods=['POST'])
def generate_color_palette():
    if 'image' in request.files:
        image_file = request.files['image']
        image_path = 'temp/' + image_file.filename
        image_file.save(image_path)
        image = Image.open(image_path)
        image_np = np.array(image)
        pixels = image_np.reshape(-1, 3)
        num_colors = 5
        kmeans = KMeans(n_clusters=num_colors, random_state=42)
        kmeans.fit(pixels)
        colors = kmeans.cluster_centers_
        color_palette = ['#%02x%02x%02x' % (int(color[0]), int(color[1]), int(color[2])) for color in colors]
        return jsonify(color_palette)

if __name__ == '__main__':
    app.run(debug=True)
