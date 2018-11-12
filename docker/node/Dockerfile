FROM node:latest

WORKDIR /var/www/lavr

COPY package*.json /var/www/lavr/react-app

RUN npm install -qy

CMD ["npm", "start"]