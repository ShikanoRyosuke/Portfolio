import os
from PIL import Image

def rename_and_convert_to_jpeg(folder_path):
    # フォルダ内のファイル名を取得
    file_list = os.listdir(folder_path)
    # ファイル名の連番用カウンタ
    counter = 1
    
    for filename in file_list:
        # ファイルの絶対パスを取得
        file_path = os.path.join(folder_path, filename)
        
        # JPEG形式に変換
        if filename.lower().endswith(('.png', '.bmp', '.gif')):
            img = Image.open(file_path)
            jpeg_file_path = os.path.splitext(file_path)[0] + '.jpeg'
            img.convert('RGB').save(jpeg_file_path)
            os.remove(file_path)
            file_path = jpeg_file_path
        
        # ファイル名を「蝮よ悽_<連番>」に変更
        new_filename = f'C_contents_{counter}.jpeg'
        new_file_path = os.path.join(folder_path, new_filename)
        os.rename(file_path, new_file_path)
        
        # カウンタをインクリメント
        counter += 1

# テスト用フォルダパス
folder_path = './C_contents/'

# フォルダ内のファイル名を変更し、JPEG形式に変換
rename_and_convert_to_jpeg(folder_path)
