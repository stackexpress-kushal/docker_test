Out-of-the-box LAMP image (PHP+MySQL)


Usage
-----

To create an image, execute the following command on the dockerfile folder:

	docker build -t < image_name > < path/to/dockerfile >

You can now push your new image to the registry:

	docker push < registry_name >


Running your LAMP docker image
------------------------------

Start your image binding the external ports 80 and 3306 in all interfaces to your container:

	docker run -d -p 80:80 -p 3306:3306 < image_name >

Test your deployment:

	curl http://localhost/

you will get a simple registration page.
# docker_test
