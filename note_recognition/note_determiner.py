import numpy as np
import matplotlib.pyplot as plt
import scipy

def normalizeAudio(data):
    return np.float32((data / np.max(data)))

SAMPLE_FOR = 1 
samplerate, data = scipy.io.wavfile.read(r'samples/note_a.wav')


data = normalizeAudio(data[0:int(samplerate*SAMPLE_FOR)])
   
freq_vector = np.arange(0, 44100, 44100 / 100)

fft_out = np.fft.fft(data[0:100])    # Интенсивность
freqs = np.fft.fftfreq(len(fft_out))    # Частота

max_intesity = np.max(abs(fft_out))   # Максимальная частота 

# Рисует график 
plt.plot(freq_vector, np.abs(fft_out))    

# i, j = np.where(fft_out==max_intesity)
# print(f'using index {i} {j}')

print(fft_out[i])
# print(np.abs(freq_vector)) 
print(max_intesity)

plt.show()


