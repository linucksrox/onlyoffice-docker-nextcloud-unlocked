# Onlyoffice
Taken from [alehoho/oo-ce-docker-license](alehoho/oo-ce-docker-license), integrated with Nextcloud behind Traefik V2 using Secret Key

This is a sample docker-compose/swarm stack file to run a customized version of OnlyOffice with Nextcloud which enables mobile editing and removes the concurrent user restriction. It also enables JWT authorization tokens so that your public Onlyoffice instance can't be used by just anyone (which is the default setting). I include Traefik V2 directives because that is how I am running this currently.

# Docker in Swarm mode
Use the stack.yml file and modify the JWT secret key and Traefik hostname directive.

# Docker-compose
Use docker-compose.yml and modify the JWT secret key and Traefik hostname directive.
