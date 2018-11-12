FROM node:latest

RUN mkdir -p /var/www/lavr/react-app
WORKDIR /var/www/lavr/react-app

COPY package.json /var/www/lavr/react-app

RUN npm install -qy

COPY . /var/www/lavr/react-app

CMD ["npm", "run", "dev"]