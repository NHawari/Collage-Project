# Image Captioning for Traffic Violations

## Overview
This project implements a model for image captioning specifically tailored to identify and describe traffic violations. The primary objective is to assist in the automated detection and description of traffic offenses captured by CCTV cameras. The model is built using the [X-Linear Attention Networks](https://arxiv.org/pdf/2003.14080.pdf) (X-LAN) architecture, which excels in generating descriptive captions by effectively utilizing high-order interactions between visual and textual features.

## Data Collection and Preprocessing
To access the dataset used in this study, you can be found [here](https://www.kaggle.com/datasets/jaluherlambang/indonesian-traffic-violation-on-motorcycle). The dataset was sourced from secondary CCTV footage obtained from eight different locations in Surabaya, Indonesia. The dataset comprises 1,127 images, categorized as follows:

- **Helmet Violations**: 465 images
- **Lane Marking Violations**: 360 images
- **No License Plate**: 108 images
- **No Violation**: 194 images
  
Each image in the dataset has been independently labeled with a single caption, ensuring that every image is associated with one unique caption. The labeling process was carried out manually to ensure accuracy and relevance in describing the contents of each image.

## X-LAN Model
The X-Linear Attention Networks (X-LAN) was used for encoding image features and decoding them to generate output text. The encoding process involves the extraction of image features by a [ResNet-101](https://pytorch.org/vision/main/models/generated/torchvision.models.resnet101.html#torchvision.models.resnet101) network and continues with several X-Linear attention block. The decoding process in X-LAN is based on an LSTM (Long Short-Term Memory) architecture.

## Evaluation
The model was evaluated using BLEU@N and ROUGE-L scores to measure the accuracy of the generated captions compared to the ground truth.

## Results
The X-LAN model achieved the following scores:
- **Best BLEU@N Average Score**: 55.02
- **Best ROUGE-L Score**: 68.37
  
These best metrics were obtained using the baseline X-LAN model with an order-8 variant.

### Research Paper
For an in-depth exploration of the model architecture, methodology, and results, please refer to the research paper [here](https://www.dropbox.com/scl/fi/9nahfgt5fliw0vrmczvpk/POMITS_5002201067-1.pdf?rlkey=8rq8rqi709vt196mmihjm55xc&st=v96arhq3&dl=1).
