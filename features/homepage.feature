#features/homepage.feature
Feature: homepage
  In order to use the web-application
  As a visitor
  I need to be able to go to the application homepage

Scenario: Visit application homepage
  Given I am a Visitor
  When I go to "/"
  Then I should see "Hello World!"

Scenario: Application running ok
  Given I am a Visitor
  When I go to "/"
  Then I should not see "Exception Thrown"