# sonar-status-image

Renders the unit test coverage as reported by SonarQube in an image suitable for use in a Github-style README.md.

## Use

    [![Test coverage](http://your.server.addr/sonar-status-image/index.php?resource=your.project.group:your-project-name)](http://your.sonar.addr/dashboard/index/your.project.group:your-project-name)

                      ^^^^^^^ url to this project's index.php file ^^^^^^^          ^^^^^^^^^ sonar project ID ^^^^^^^^^   ^^^^^^^^^^^^^^^^^^^^^^^ link to sonar project page ^^^^^^^^^^^^^^^^^^^^^^^^

## Example

[![Test coverage](http://sonar.peircean.com:8008/sonar-status-image/?resource=com.peircean.glusterfs:glusterfs-java-filesystem)](http://sonar.peircean.com/dashboard/index/com.peircean.glusterfs:glusterfs-java-filesystem)

## Acknowledgements

Thanks to c.bavota for the easy to use example of [turning text into an image with GD](http://bavotasan.com/2009/turn-text-into-an-image-using-the-php-gd-library/)
