DOCKERPATH=docker.affec.tv/affectv/website
DOCKERTAG=$(shell git rev-parse --abbrev-ref HEAD)

build:
	docker build -t $(DOCKERPATH):$(DOCKERTAG) .
push: build
	docker push $(DOCKERPATH):$(DOCKERTAG)